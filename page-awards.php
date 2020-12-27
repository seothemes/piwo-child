<?php
/**
 *
 * Template Name: Awards Pages
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
    <h2>Awards</h2>
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
        <h4>Stay abreast of the latest exciting happenings at anexinet and learn how we continue to leverage the very latest technologies to help you deliver the best customer experience possible</h4>
      </div> <span id="awards"></span>
    </div>
  </div>
</section>
<!-- Gradient Jumbotron Module End -->
      
<!--Section 4 begins-->
<section class="fourth-cont container-fluid">
  <div class="container">
    
    <div class="title-cont">
      <h4>Awards</h4>
     </div>
   
<!-- Awards Begin -->
<div class="row awards-cont">
      <?php
        global $post;
        $args = array(
          'posts_per_page' => '20',
          'cat' => "493",
          'order' => 'DESC'
          );

        global $the_query_category;
          $the_query_category = new WP_Query( $args );
          $count = 1;
            if ( $the_query_category->have_posts() ) : while (    $the_query_category->have_posts() ) : $the_query_category->the_post();
      ?>

      <div class="col-md-4 col-lg-4 col-cont">
        <div class="content-cont">
          <div class="img-cont" style="display:flex; justify-content:center; border: 1px solid #c1c1c1;">
            <div class="inner-img-cont">
             <?php if  (has_post_thumbnail() ) {
                    the_post_thumbnail();
                   }
                  else {         
                  // echo '<img src="' . get_bloginfo( "template_directory" ) . '/assets/images/red-logo.png" />';
                       }
                ?>
                </div>
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