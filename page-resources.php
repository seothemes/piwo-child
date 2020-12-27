<?php
/**
 *
 * Template Name: Resources Template
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



<!-- Gradient Jumbotron Module Begin -->
<section class="grdnt-jumbo-cont">
  <div class="container">
    <div class="row">
      <div class="jumbotron-cont">
        <h4>We strive to provide a great customer experience in every way possible, which includes offering a robust library of resources for your perusal: webinars, guides, tools, blogs, and podcasts.</h4>
      </div>
    </div>
  </div>
</section>
<!-- Gradient Jumbotron Module End -->
<!-- tools begin -->
<!--Section 3 begins-->
<section class="fourth-cont">
  <div class="container">
    <h2 class="mb-40">Tools</h2>
    <div class="row">
      <div class="col-md-6 col-lg-4">
        <div class="content-cont">
          <div class="img-cont">
            <a href="https://www.anexinet.com/cxmaturity/" target="_blank"> <img class="lazy-loaded" src="https://www.anexinet.com/wp-content/uploads/2018/10/analytics-dpe.jpg" data-lazy-type="image" data-src="https://www.anexinet.com/wp-content/uploads/2018/10/analytics-dpe.jpg" alt="Upcoming Events image"><noscript><img src="https://www.anexinet.com/wp-content/uploads/2018/10/analytics-dpe.jpg" alt="Upcoming Events image"/></noscript></a>
          </div>
          <div class="info-cont">
           
            <div class="title-cont">
              <a href="https://www.anexinet.com/cxmaturity/" target="_blank"> <h3 class="c-white">Maturity Assessment</h3></a>
             
            </div>
            <div class="text-cont">
            <a href="https://www.anexinet.com/cxmaturity/" target="_blank"> <h5>Test Your Customer Experience Maturity Now!</h5></a>
              <a href="https://www.anexinet.com/cxmaturity/" target="_blank"> <p>Please take a moment to assess the Maturity of your organization’s Customer Experience now with this interactive preview of the full assessment tool.</p> </a>
            </div>
            <div class="cont-btn">
              <a href="https://www.anexinet.com/cxmaturity/" class="btn" target="_blank">Assess Yourself</a>
            </div>
          </div> <!-- end info container-->
        </div> <!-- end content container -->
      </div>  <!-- end col -4 -->
      <div class="col-md-6 col-lg-4">
        <div class="content-cont">
         <a href="http://enterpriseappcosts.com/?__hstc=153402343.345778e2acb9cf27e6b4b1d6ed5352cd.1558462039715.1560275890017.1560287029618.66&amp;__hssc=153402343.36.1560287029618&amp;__hsfp=2963325597#/home" target="_blank"> </a><div class="img-cont"><a href="http://enterpriseappcosts.com/?__hstc=153402343.345778e2acb9cf27e6b4b1d6ed5352cd.1558462039715.1560275890017.1560287029618.66&amp;__hssc=153402343.36.1560287029618&amp;__hsfp=2963325597#/home" target="_blank">
            <img class="lazy-loaded" src="https://www.anexinet.com/wp-content/uploads/2018/09/k-177-teddy-ae-267.jpg" data-lazy-type="image" data-src="https://www.anexinet.com/wp-content/uploads/2018/09/k-177-teddy-ae-267.jpg" alt="Enterprise App Cost"><noscript><img src="https://www.anexinet.com/wp-content/uploads/2018/09/k-177-teddy-ae-267.jpg" alt="Enterprise App Cost"></noscript></a>
          </div>
          <div class="info-cont">
           
            <div class="title-cont">
             <a href="http://enterpriseappcosts.com/?__hstc=153402343.345778e2acb9cf27e6b4b1d6ed5352cd.1558462039715.1560275890017.1560287029618.66&amp;__hssc=153402343.36.1560287029618&amp;__hsfp=2963325597#/home" target="_blank"> <h3 class="c-white">App Cost Calculator</h3></a>
           
            </div>
            <div class="text-cont">
            <a href="http://enterpriseappcosts.com/?__hstc=153402343.345778e2acb9cf27e6b4b1d6ed5352cd.1558462039715.1560275890017.1560287029618.66&amp;__hssc=153402343.36.1560287029618&amp;__hsfp=2963325597#/home" target="_blank">  <h5>How Much Will It Cost To Build That App?</h5></a>
            <a href="http://enterpriseappcosts.com/?__hstc=153402343.345778e2acb9cf27e6b4b1d6ed5352cd.1558462039715.1560275890017.1560287029618.66&amp;__hssc=153402343.36.1560287029618&amp;__hsfp=2963325597#/home" target="_blank">  <p>This calculator identifies key variables to help you arrive at a ballpark cost estimate, as informed by our experience delivering countless apps to clients worldwide.</p></a>
            </div>
            <div class="cont-btn">
              <a href="http://www.enterpriseappcosts.com/?__hstc=153402343.345778e2acb9cf27e6b4b1d6ed5352cd.1558462039715.1560275890017.1560287029618.66&amp;__hssc=153402343.36.1560287029618&amp;__hsfp=2963325597" class="btn" target="_blank">Get Started!</a>
            </div>
          </div> <!-- end info container-->
        </div> <!-- end content container -->
      </div>  <!-- end col -4 -->
      <div class="col-md-6 col-lg-4">
        <div class="content-cont">
          <div class="img-cont">
            <a href="https://www.anexinet.com/disaster-recovery-assessment/" target="_blank"> <img class="lazy-loaded" src="https://www.anexinet.com/wp-content/uploads/2018/09/sd-wan-hero-e-265892-c.jpg" data-lazy-type="image" data-src="https://www.anexinet.com/wp-content/uploads/2018/09/sd-wan-hero-e-265892-c.jpg" alt="Upcoming Events image"><noscript><img src="https://www.anexinet.com/wp-content/uploads/2018/09/sd-wan-hero-e-265892-c.jpg" alt="Upcoming Events image"></noscript></a>
          </div>
          <div class="info-cont">
            <div class="title-cont">
              <a href="https://www.anexinet.com/disaster-recovery-assessment/" target="_blank"> <h3 class="c-white">Disaster Recovery </h3></a>
             
            </div>
            <div class="text-cont text-cont-dstr-rcvr">
            <a href="https://www.anexinet.com/disaster-recovery-assessment/" target="_blank"> <h5>The Ultimate Disaster Recovery Checklist</h5></a>
              <a href="https://www.anexinet.com/disaster-recovery-assessment/" target="_blank"> <p>A disaster can strike at any time and damage your company’s reputation – or worse. How confident are you about your disaster recovery plan?</p></a>
            </div>
            <div class="cont-btn">
              <a href="https://www.anexinet.com/disaster-recovery-assessment/" class="btn" target="_blank">See If You’re Ready</a>
            </div>
          </div> <!-- end info container-->
        </div> <!-- end content container -->
      </div>  <!-- end col -4 -->


    </div> <!-- row ends-->
  </div> <!-- Main container ends-->

  <!-- tools end -->

		</section>
  <!-- tools end -->
  <!-- 2th section begins -->
<section class="sixth-cont">
  <div class="container-fluid">
    <div class="container">
      <div class="row ptb-40">
      
        <div class="col-md-3 col-lg-3 img-cont">
          <img src="https://www.anexinet.com/wp-content/uploads/2019/06/ic-webinars.png" alt="Kickstarts image">
        </div>
        <div class="col-md-6 col-lg-6 h2-cont">
          <h2>Webinars</h2>
          <p>Our strategists, designers and developers produce monthly webinars to share their expertise and keep you up to date on the latest happenings.<br>Don’t Miss It!</p>
        </div>
        <div class="col-md-3 col-lg-3 btn-cont-cont">
          <div class="cont-btn">
            <a href="https://www.anexinet.com/resources/webinars/" class="btn">Get Started</a>
          </div>
          
        </div>

      </div>
    </div>
  </div>
</section> <!-- section ends -->            
<!-- 2th section ends -->
<!-- 7th section begins  -->
<section class="fourth-cont container-fluid">
<div class="container">
  <h3 class="ta-center mb-80">Latest  Posts</h3>
    <div class="row">
     
      <?php
      
        global $post;
       
        $args = array(
          'posts_per_page' => '3',
          'cat' => "23, 47, 24, 489, 1029",
          'order' => 'DESC', 
          'paged' => $paged
          );
          
        global $the_query_category;
          $the_query_category = new WP_Query( $args );
          $count = 1;
            if ( $the_query_category->have_posts() ): 
              while (    $the_query_category->have_posts() ): 
                $the_query_category->the_post();
      ?>
<!-- looped content begin -->
      <div class="col-md-4 col-lg-4">
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
            
            </div>
            <div class="btn-cont">
              <a href="<?php the_permalink();?>" id="enlaceA">Read Now</a>
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
    </div> <!-- row -->
    <div class="container-fluid btn-cont-cont">
      <div class ="cont-btn">
        <a href="https://www.anexinet.com/blog/" class="btn">View More Post</a>
      </div>
      </div> 
  </div> <!--  container -->
</section> <!-- section -->

<!-- 7th section ends  -->
<!--  -->
  <section class="background-podcast-image">
    <div class="container">
      <h2>Podcast</h2>
      <p>Our suite of technology podcasts represents one more way Anexinet works to help you provide a Complete Digital Experience for customers, employees and end users.</p>
      <div class="cont-btn">
      <a href="https://www.anexinet.com/resources/podcasts/" class="btn">Give a Listen &rarr;</a>
      </div>
    </div>  
  </section>
<!--  -->

<!--Section 4 begins-->

<!--Section 4 Ends-->
<!--Section 4 begins-->
<section class="fourth-cont container-fluid">
  <div class="container">
    <div class="title-cont py-4 mt-4">
      <h2 class="mb-40 ta-center">Guides</h2>
     </div>
    <div class="row">
      <?php 
        global $post;
        $args = array(
          'posts_per_page' => '3',
          'post_type' => array("anxt_infographics", "anxt_tip_sheets", "anxt_ebooks", "anxt_white_papers"),
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
            <a href="<?php the_field("landing_page_url_ebook");?>"> <?php the_post_thumbnail('square-size');?></a>
           </div>

          <div class="info-cont">
            
            <div class="title-cont">
              <a href="<?php the_field("landing_page_url_ebook");?>"><h4><?php the_title(); ?></h4></a>
            </div>
           
            <div class="btn-cont">
              <a href="<?php the_field("landing_page_url_ebook");?>">Learn More</a>
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
    <div class="container-fluid btn-cont-cont">
      <div class ="cont-btn">
        <a href="https://www.anexinet.com/resources/guides/" class="btn"> View All</a>
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
<?php endwhile; ?>
<?php get_footer();