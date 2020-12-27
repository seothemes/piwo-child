<?php
/**
 *
 * Template Name: Clients Template
 *
 * @package      Page Template
 * @author       Eric Lukavsky <elukavsky@anexinet.com>
 * @copyright    Copyright (c) 2016, Anexinet
 * @license      https://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
 */

?>
<?php get_header(); ?>
<!-- Section 1 -->
  <section class="part-main-cont">
    <div class="img-cont">
    </div>    
    <div class="text-cont">
      <div class="h2-cont">
        <h2>Clients</h2>
        <div class="subh2-cont">
        <p>We’re proud of our long and celebrated record of providing guidance to these industry-leading organizations and countless others.</p>
        </div>
      </div>
    </div>

  </section>
<!-- Section1 -->
<!-- Section 2 Begin -->
<section class="part-second-cont">
  <div class="jumbotron-cont">
    <h4>This is just a partial list of the folks we helped modernize and transform to ensure their engagement, analytics, and infrastructure work flawlessly together and keep pace with today’s complex, real-time business-data demands.</h4>
  </div>
</section>
 
<!-- Section 2 End -->
<!-- Filter Begin -->
<div class="main-sect-cont">
  <section class="second-cont">
    <div class="container cont-btn">
      <a href="#" class="grdnt-btn tipo-cat btn active" data-slug="all">
        All</a>
        <a href="#" class="grdnt-btn btn" data-slug="service_center">
        Service Center</a>
      <a href="#" class="grdnt-btn btn" data-slug="financial_insurance">
      Financial / Insurance</a>
      <a href="#" class="grdnt-btn btn" data-slug="life_science">
      Life Science</a>
       <a href="#" class="grdnt-btn btn" data-slug="manufacturing">
       Manufacturing</a> 
       <a href="#" class="grdnt-btn btn" data-slug="services">
       Services</a> 
       <a href="#" class="grdnt-btn btn" data-slug="energy_utility_general">
       Energy, Utility, General</a> 
    </div>
  </section>
</div> 
<!-- Filter End -->
<!--Section3 begins-->
  <section class="part-frth-sect container-fluid">
    
    <div class="part-all-part-cont">
      <div class="container">
        <div class="row cont-post_all cont-query">
<!-- loop end -->
          <?php
            global $post;
            $args = array( 
            'post_type' => 'anxnt_clients',
            'posts_per_page' => '-1',
            'order' => 'DESC'
           // 'tax_query' => array( 
           // array( 'taxonomy' => 'partner_categories',
           // 'field' => 'slug', 
           // 'terms' => ''
            // can be set to ID 'terms' => 'bob' if field is ID you can reference by cat/term number 
            //  ) 
           //  ) 
            );

            global $the_query_category;
            $the_query_category = new WP_Query( $args );
            $count = 1;
            if ( $the_query_category->have_posts() ) : while ( $the_query_category->have_posts() ) : $the_query_category->the_post();
          ?>
<!-- loop end -->
<!-- looped content begin -->
          <div class="col-sm-6 col-md-3">
             <?php the_post_thumbnail('square-size');?>
           </div>
<!-- looped content end -->   
<!-- If Begin -->
          <?php $count++; ?>
          <?php endwhile; ?>
          <?php
          wp_reset_query(); ?>
<!-- post navigation -->
          <?php else: ?>
<!-- no posts found -->
          <?php endif; ?>
<!-- If End -->
        </div> <!-- row end -->
<!-- cloud partners begin -->
        <div class="row cont-post_service_center cont-query">
<!-- loop end -->
          <?php
            global $post;
            $args = array( 
            'post_type' => 'anxnt_clients',
            'posts_per_page' => '-1',
            'order' => 'DESC',
            'tax_query' => array( 
            array( 'taxonomy' => 'clients_categories',
            'field' => 'slug', 
            'terms' => 'service_center'
             //can be set to ID 'terms' => 'bob' if field is ID you can reference by cat/term number 
              ) 
             ) 
            );

            global $the_query_category;
            $the_query_category = new WP_Query( $args );
            $count = 1;
            if ( $the_query_category->have_posts() ) : while ( $the_query_category->have_posts() ) : $the_query_category->the_post();
          ?>
<!-- loop end -->
<!-- looped content begin -->
          <div class="col-sm-6 col-md-3">
             <?php the_post_thumbnail('square-size');?>
           </div>
<!-- looped content end -->   
<!-- If Begin -->
          <?php $count++; ?>
          <?php endwhile; ?>
          <?php
          wp_reset_query(); ?>
<!-- post navigation -->
          <?php else: ?>
<!-- no posts found -->
          <?php endif; ?>
<!-- If End -->
        </div> <!-- row end -->
<!-- Cloud Partners end -->
<!-- Customer Engagement Partners begin -->
<div class="row cont-post_financial_insurance cont-query">
<!-- loop end -->
          <?php
            global $post;
            $args = array( 
            'post_type' => 'anxnt_clients',
            'posts_per_page' => '-1',
            'order' => 'DESC',
            'tax_query' => array( 
            array( 'taxonomy' => 'clients_categories',
            'field' => 'slug', 
            'terms' => 'financial_insurance'
             //can be set to ID 'terms' => 'bob' if field is ID you can reference by cat/term number 
              ) 
             ) 
            );

            global $the_query_category;
            $the_query_category = new WP_Query( $args );
            $count = 1;
            if ( $the_query_category->have_posts() ) : while ( $the_query_category->have_posts() ) : $the_query_category->the_post();
          ?>
<!-- loop end -->
<!-- looped content begin -->
          <div class="col-sm-6 col-md-3">
             <?php the_post_thumbnail('square-size');?>
           </div>
<!-- looped content end -->   
<!-- If Begin -->
          <?php $count++; ?>
          <?php endwhile; ?>
          <?php
          wp_reset_query(); ?>
<!-- post navigation -->
          <?php else: ?>
<!-- no posts found -->
          <?php endif; ?>
<!-- If End -->
        </div> <!-- row end -->
<!-- Customer Engagement Partners end -->
<!-- enterprise mobility partners begin -->
<div class="row cont-post_life_science cont-query">
<!-- loop end -->
          <?php
            global $post;
            $args = array( 
            'post_type' => 'anxnt_clients',
            'posts_per_page' => '-1',
            'order' => 'DESC',
            'tax_query' => array( 
            array( 'taxonomy' => 'clients_categories',
            'field' => 'slug', 
            'terms' => 'life_science'
             //can be set to ID 'terms' => 'bob' if field is ID you can reference by cat/term number 
              ) 
             ) 
            );

            global $the_query_category;
            $the_query_category = new WP_Query( $args );
            $count = 1;
            if ( $the_query_category->have_posts() ) : while ( $the_query_category->have_posts() ) : $the_query_category->the_post();
          ?>
<!-- loop end -->
<!-- looped content begin -->
          <div class="col-sm-6 col-md-3">
             <?php the_post_thumbnail('square-size');?>
           </div>
<!-- looped content end -->   
<!-- If Begin -->
          <?php $count++; ?>
          <?php endwhile; ?>
          <?php
          wp_reset_query(); ?>
<!-- post navigation -->
          <?php else: ?>
<!-- no posts found -->
          <?php endif; ?>
<!-- If End -->
        </div> <!-- row end -->
<!-- Enterprise Mobility partners end -->
<!-- Analytics and Insights partners begin -->
<div class="row cont-post_manufacturing cont-query">
<!-- loop end -->
          <?php
            global $post;
            $args = array( 
            'post_type' => 'anxnt_clients',
            'posts_per_page' => '-1',
            'order' => 'DESC',
            'tax_query' => array( 
            array( 'taxonomy' => 'clients_categories',
            'field' => 'slug', 
            'terms' => 'manufacturing'
             //can be set to ID 'terms' => 'bob' if field is ID you can reference by cat/term number 
              ) 
             ) 
            );

            global $the_query_category;
            $the_query_category = new WP_Query( $args );
            $count = 1;
            if ( $the_query_category->have_posts() ) : while ( $the_query_category->have_posts() ) : $the_query_category->the_post();
          ?>
<!-- loop end -->
<!-- looped content begin -->
          <div class="col-sm-6 col-md-3">
             <?php the_post_thumbnail('square-size');?>
           </div>
<!-- looped content end -->   
<!-- If Begin -->
          <?php $count++; ?>
          <?php endwhile; ?>
          <?php
          wp_reset_query(); ?>
<!-- post navigation -->
          <?php else: ?>
<!-- no posts found -->
          <?php endif; ?>
<!-- If End -->
        </div> <!-- row end -->
<!-- Analytics and Insights partners end -->
<!-- enterprise mobility partners begin -->
<div class="row cont-post_services cont-query">
<!-- loop end -->
          <?php
            global $post;
            $args = array( 
            'post_type' => 'anxnt_clients',
            'posts_per_page' => '-1',
            'order' => 'DESC',
            'tax_query' => array( 
            array( 'taxonomy' => 'clients_categories',
            'field' => 'slug', 
            'terms' => 'services'
             //can be set to ID 'terms' => 'bob' if field is ID you can reference by cat/term number 
              ) 
             ) 
            );

            global $the_query_category;
            $the_query_category = new WP_Query( $args );
            $count = 1;
            if ( $the_query_category->have_posts() ) : while ( $the_query_category->have_posts() ) : $the_query_category->the_post();
          ?>
<!-- loop end -->
<!-- looped content begin -->
          <div class="col-sm-6 col-md-3">
             <?php the_post_thumbnail('square-size');?>
           </div>
<!-- looped content end -->   
<!-- If Begin -->
          <?php $count++; ?>
          <?php endwhile; ?>
          <?php
          wp_reset_query(); ?>
<!-- post navigation -->
          <?php else: ?>
<!-- no posts found -->
          <?php endif; ?>
<!-- If End -->
        </div> <!-- row end -->
<!-- Enterprise Mobility partners end -->
<!-- enterprise mobility partners begin -->
<div class="row cont-post_energy_utility_general cont-query">
<!-- loop end -->
          <?php
            global $post;
            $args = array( 
            'post_type' => 'anxnt_clients',
            'posts_per_page' => '-1',
            'order' => 'DESC',
            'tax_query' => array( 
            array( 'taxonomy' => 'clients_categories',
            'field' => 'slug', 
            'terms' => 'energy_utility_general'
             //can be set to ID 'terms' => 'bob' if field is ID you can reference by cat/term number 
              ) 
             ) 
            );

            global $the_query_category;
            $the_query_category = new WP_Query( $args );
            $count = 1;
            if ( $the_query_category->have_posts() ) : while ( $the_query_category->have_posts() ) : $the_query_category->the_post();
          ?>
<!-- loop end -->
<!-- looped content begin -->
          <div class="col-sm-6 col-md-3">
             <?php the_post_thumbnail('square-size');?>
           </div>
<!-- looped content end -->   
<!-- If Begin -->
          <?php $count++; ?>
          <?php endwhile; ?>
          <?php
          wp_reset_query(); ?>
<!-- post navigation -->
          <?php else: ?>
<!-- no posts found -->
          <?php endif; ?>
<!-- If End -->
        </div> <!-- row end -->
<!-- Enterprise Mobility partners end -->

      </div> <!-- container  end -->
    </div> <!-- part all end -->
  </section> <!-- section end -->
<!-- Section 3 ends-->
<!-- Anexinet Main Form Begin -->
<?php include('form.php'); ?> 
<!-- Anexinet Main Form End -->
<?php get_footer(); ?>