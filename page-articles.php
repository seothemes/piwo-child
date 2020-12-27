<?php
/**
 *
 * Template Name: Articles Page
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
    <h2>Articles</h2>
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
      
<!--Display Articles Category-->

<!--Section 4 begins-->
<section class="fourth-cont container-fluid">
  <div class="container">
    <div class="main-sect-cont">
      <div class="title-cont">
        <h4>Articles</h4>
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
          'posts_per_page' => '-1',
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
            <a href="<?php the_permalink();?>"> 
            <?php if  (has_post_thumbnail() ) {
                      the_post_thumbnail('square-size'); }
                  else {  
                      echo '<img src="' . get_bloginfo( "template_directory" ) . '/assets/images/generic-image.jpg" />'; 
                       }?></a>
          </div>

          <div class="info-cont">
            <div class="date-author-cont"> 
              <div class="date-cont">
                <p><?php the_date(); ?></p>
              </div>
              <!-- <div class="date-cont">
                <p><//?php the_category(); ?></p>
              </div> -->
              <!-- <div class="author-cont">
                <p><//?php the_author(); ?></p>
              </div> -->
            </div>
            <div class="title-cont">
              <a href="<?php the_permalink();?>"><h4><?php the_title(); ?></h4></a>
            </div>
            <div class="btn-cont">
              <a href="<?php the_permalink();?>">Read More</a>
            </div>
           </div> <!-- end info container-->

         </div> <!-- end content container -->
      </div>  <!-- col 4 -->
     

          <?php $count++; ?>

          <?php endwhile; ?>

          <?php wp_reset_query(); ?>
<!-- post navigation -->
    <?php else: ?>

<!-- no posts found -->
    <?php endif; ?>

    <!-- <div class="col-md-12">
      <div class="container blog-pager">
        <?php wp_pagenavi( array( 'query' => $the_query_category) ); ?>
      </div>
    </div> -->

    </div> <!-- row -->

  </div> <!--  container -->
 </section> <!-- section -->
<!--Section 4 Ends-->
 <!-- <//?php if(!$full_pages == true) {
		    echo '</div>';
	      }
	          ?> -->
        </div>

<!-- Anexinet Main Form Begin -->
<?php include('form.php'); ?> 
<!-- Anexinet Main Form End -->
</div>
<?php get_footer();