<?php
/**
 *
 * Template Name: Guides Page
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

<div class="classic page-bg-color <?php echo esc_attr($class);?> <?php echo esc_attr($full_class); ?>">
	<?php if(!$full_pages == true) {
		echo '<div class="row">';
	}
	?>
		<div class="<?php echo esc_attr($col_class);?> blog-content">
			<?php
			the_content();
			
			?>
    </div>ç
    <style>
    .second-cont  button{
     border: none !important; 
     height: inherit !important;
     margin-top: inherit !important; 
     text-transform: initial !important;
      }
      </style>

<!-- Post Section Begin -->
<!-- Main  container -->
<div class="main-sect-cont container">
<!-- Filter Begin -->
  <section class="second-cont">
    <div class="container">
      <a href="#" class="grdnt-btn" data-slug="all">
        <button >All</button></a>
      <a href="#" class="grdnt-btn" data-slug="anxt_white_papers">
        <button >White Papers</button></a>
      <a href="#" class="grdnt-btn" data-slug="anxt_ebooks">
        <button >eBooks</button></a>
      <a href="#" class="grdnt-btn" data-slug="anxt_infographics">
        <button >Infographics</button></a>
      <a href="#" class="grdnt-btn" data-slug="anxt_tip_sheets">
        <button >Tip Sheets</button></a>
    </div>
  </section>
<!-- Filter End -->
<section class="fourth-cont container-fluid">
  <div class="container">
    <div class="row cont-post_all cont-query" style="justify-content:flex-start;">
<!-- Loop Begin -->
      <?php
        global $post;
        $args = array(
        'posts_per_page' => '-1',
        'post_type' => array("anxt_infographics", "anxt_tip_sheets", "anxt_ebooks", "anxt_white_papers"),
        'offset' => 1,
        'order' => 'DESC'
        );

      global $the_query_category;
        $the_query_category = new WP_Query( $args );
        $count = 1;
          if ( $the_query_category->have_posts() ) : while ( $the_query_category->have_posts() ) : $the_query_category->the_post();
      ?>
<!-- Loop End-->
<!-- Looped Content Begin -->
      <div class="col-sm-6 col-md-4 col-lg-4">
        <div class="content-cont">
          <div class="img-cont">
          <a href="<?php the_field("landing_page_url_ebook");?>" target="_blank"> <?php the_post_thumbnail('square-size');?></a>
          </div>
          <div class="info-cont">
            <!-- <div class="date-author-cont">
            
              <div class="date-cont">
                <p><?php the_date(); ?></p>
              </div>
              <div class="author-cont">
                <p><?php the_author(); ?></p>
              </div>
            </div> -->
            <div class="title-cont">
              <a href="<?php the_field("landing_page_url_ebook");?>" target="_blank"> <h4><?php the_title(); ?></h4></a>
            </div>
            <div class="text-cont">
              <?php if ( get_field( 'custom_description' ) ): ?>
                <a href="<?php the_field("landing_page_url_ebook");?>" target="_blank"> <p><?php the_field("custom_description"); ?></p></a>
              <?php else: // field_name returned false ?>
                <a href="<?php the_field("landing_page_url_ebook");?>" target="_blank"> <p><?php the_excerpt(); ?></p></a>
              <?php endif; // end of if field_name logic ?>
            </div>
            <div class="btn-cont">
              <a href="<?php the_field("landing_page_url_ebook");?>" target="_blank">Download Now</a>
            </div>
          </div> <!-- end info container-->
        </div> <!-- end content container -->
      </div>  <!-- end col -4 -->
<!-- Looped content end -->

        <?php $count++; ?>

        <?php endwhile; ?>

        <?php

        wp_reset_query(); ?>
<!-- post navigation -->
        <?php else: ?>

<!-- no posts found -->
        <?php endif; ?>
        
        </div> <!-- row end-->



        <div class="row cont-post_anxt_white_papers cont-query">
<!-- Loop Begin -->
      <?php
        global $post;
        $args = array(
        'posts_per_page' => '-1',
        'post_type' => "anxt_white_papers",
        // 'offset' => "2",
        'order' => 'DESC'
        );

      global $the_query_category;
        $the_query_category = new WP_Query( $args );
        $count = 1;
          if ( $the_query_category->have_posts() ) : while ( $the_query_category->have_posts() ) : $the_query_category->the_post();
      ?>
<!-- Loop End-->
<!-- Looped Content Begin -->
      <div class="col-sm-6 col-md-4 col-lg-4">
        <div class="content-cont">
          <div class="img-cont">
          <a href="<?php the_field("landing_page_url_ebook");?>" target="_blank"> <?php the_post_thumbnail('square-size');?></a>
          </div>
          <div class="info-cont">
            <!-- <div class="date-author-cont"> 
              <div class="date-cont">
                <p><?php the_date(); ?></p>
              </div>
              <div class="author-cont">
                <p><?php the_author(); ?></p>
              </div>
            </div> -->
            <div class="title-cont">
              <a href="<?php the_field("landing_page_url_ebook");?>" target="_blank"> <h4><?php the_title(); ?></h4></a>
            </div>
            <div class="text-cont">
            <?php if ( get_field( 'custom_description' ) ): ?>
                <a href="<?php the_field("landing_page_url_ebook");?>" target="_blank"> <p><?php the_field("custom_description"); ?></p></a>
              <?php else: // field_name returned false ?>
                <a href="<?php the_field("landing_page_url_ebook");?>" target="_blank"> <p><?php the_excerpt(); ?></p></a>
              <?php endif; // end of if field_name logic ?>
            </div>
            <div class="btn-cont">
              <a href="<?php the_field("landing_page_url_ebook");?>" target="_blank">Download Now</a>
            </div>
          </div> <!-- end info container-->
        </div> <!-- end content container -->
      </div>  <!-- end col -4 -->
<!-- Looped content end -->

        <?php $count++; ?>

        <?php endwhile; ?>

        <?php

        wp_reset_query(); ?>
<!-- post navigation -->
        <?php else: ?>

<!-- no posts found -->
        <?php endif; ?>
        
        </div> <!-- row end-->




<div class="row cont-post_anxt_ebooks cont-query">
<!-- Loop Begin -->
      <?php
        global $post;
        $args = array(
        'posts_per_page' => '-1',
        'post_type' => "anxt_ebooks",
        'offset' => 1,
        'order' => 'DESC'
        );

      global $the_query_category;
        $the_query_category = new WP_Query( $args );
        $count = 1;
          if ( $the_query_category->have_posts() ) : while ( $the_query_category->have_posts() ) : $the_query_category->the_post();
      ?>
<!-- Loop End-->
<!-- Looped Content Begin -->
      <div class="col-sm-6 col-md-4 col-lg-4">
        <div class="content-cont">
          <div class="img-cont">
          <a href="<?php the_field("landing_page_url_ebook");?>" target="_blank"> <?php the_post_thumbnail('square-size');?></a>
          </div>
          <div class="info-cont">
            <!-- <div class="date-author-cont"> 
              <div class="date-cont">
                <p><?php the_date(); ?></p>
              </div>
              <div class="author-cont">
                <p><?php the_author(); ?></p>
              </div>
            </div> -->
            <div class="title-cont">
              <a href="<?php the_field("landing_page_url_ebook");?>" target="_blank"> <h4><?php the_title(); ?></h4></a>
            </div>
            <div class="text-cont">
            <?php if ( get_field( 'custom_description' ) ): ?>
                <a href="<?php the_field("landing_page_url_ebook");?>" target="_blank"> <p><?php the_field("custom_description"); ?></p></a>
              <?php else: // field_name returned false ?>
                <a href="<?php the_field("landing_page_url_ebook");?>" target="_blank"> <p><?php the_excerpt(); ?></p></a>
              <?php endif; // end of if field_name logic ?>
            </div>
            <div class="btn-cont">
              <a href="<?php the_field("landing_page_url_ebook");?>" target="_blank">Download Now</a>
            </div>
          </div> <!-- end info container-->
        </div> <!-- end content container -->
      </div>  <!-- end col -4 -->
<!-- Looped content end -->

        <?php $count++; ?>

        <?php endwhile; ?>

        <?php

        wp_reset_query(); ?>
<!-- post navigation -->
        <?php else: ?>

<!-- no posts found -->
        <?php endif; ?>
        
        </div> <!-- row end-->




<div class="row cont-post_anxt_infographics cont-query">
<!-- Loop Begin -->
      <?php
        global $post;
        $args = array(
        'posts_per_page' => '-1',
        'post_type' => "anxt_infographics",
        'order' => 'DESC'
        );

      global $the_query_category;
        $the_query_category = new WP_Query( $args );
        $count = 1;
          if ( $the_query_category->have_posts() ) : while ( $the_query_category->have_posts() ) : $the_query_category->the_post();
      ?>
<!-- Loop End-->
<!-- Looped Content Begin -->
      <div class="col-sm-6 col-md-4 col-lg-4">
        <div class="content-cont">
          <div class="img-cont">
          <a href="<?php the_field("landing_page_url_ebook");?>"> <?php the_post_thumbnail('square-size');?></a>
          </div>
          <div class="info-cont">
            <!-- <div class="date-author-cont"> 
              <div class="date-cont">
                <p><?php the_date(); ?></p>
              </div>
              <div class="author-cont">
                <p><?php the_author(); ?></p>
              </div>
            </div> -->
            <div class="title-cont">
              <a href="<?php the_field("landing_page_url_ebook");?>"> <h4><?php the_title(); ?></h4></a>
            </div>
            <div class="text-cont">
            <?php if ( get_field( 'custom_description' ) ): ?>
                <a href="<?php the_field("landing_page_url_ebook");?>" target="_blank"> <p><?php the_field("custom_description"); ?></p></a>
              <?php else: // field_name returned false ?>
                <a href="<?php the_field("landing_page_url_ebook");?>" target="_blank"> <p><?php the_excerpt(); ?></p></a>
              <?php endif; // end of if field_name logic ?>
            </div>
            <div class="btn-cont">
              <a href="<?php the_field("landing_page_url_ebook");?>">Download Now</a>
            </div>
          </div> <!-- end info container-->
        </div> <!-- end content container -->
      </div>  <!-- end col -4 -->
<!-- Looped content end -->

        <?php $count++; ?>

        <?php endwhile; ?>

        <?php

        wp_reset_query(); ?>
<!-- post navigation -->
        <?php else: ?>

<!-- no posts found -->
        <?php endif; ?>
        
        </div> <!-- row end-->






        <div class="row cont-post_anxt_tip_sheets cont-query">
<!-- Loop Begin -->
      <?php
        global $post;
        $args = array(
        'posts_per_page' => '-1',
        'post_type' => "anxt_tip_sheets",
        'order' => 'DESC'
        );

      global $the_query_category;
        $the_query_category = new WP_Query( $args );
        $count = 1;
          if ( $the_query_category->have_posts() ) : while ( $the_query_category->have_posts() ) : $the_query_category->the_post();
      ?>
<!-- Loop End-->
<!-- Looped Content Begin -->
      <div class="col-sm-6 col-md-4 col-lg-4">
        <div class="content-cont">
          <div class="img-cont">
          <a href="<?php the_field("landing_page_url_ebook");?>" target="_blank";?> <?php the_post_thumbnail('square-size');?></a>
          </div>
          <div class="info-cont">
            <!-- <div class="date-author-cont"> 
              <div class="date-cont">
                <p><?php the_date(); ?></p>
              </div>
              <div class="author-cont">
                <p><?php the_author(); ?></p>
              </div>
            </div> -->
            <div class="title-cont">
              <a href="<?php the_field("landing_page_url_ebook");?>" target="_blank";?> <h4><?php the_title(); ?></h4></a>
            </div>
            <div class="text-cont">
            <?php if ( get_field( 'custom_description' ) ): ?>
                <a href="<?php the_field("landing_page_url_ebook");?>" target="_blank"> <p><?php the_field("custom_description"); ?></p></a>
              <?php else: // field_name returned false ?>
                <a href="<?php the_field("landing_page_url_ebook");?>" target="_blank"> <p><?php the_excerpt(); ?></p></a>
              <?php endif; // end of if field_name logic ?>
            </div>
            <div class="btn-cont">
              <a href="<?php the_field("landing_page_url_ebook");?>" target="_blank";?>Download Now</a>
            </div>
          </div> <!-- end info container-->
        </div> <!-- end content container -->
      </div>  <!-- end col -4 -->
<!-- Looped content end -->

        <?php $count++; ?>

        <?php endwhile; ?>

        <?php

        wp_reset_query(); ?>
<!-- post navigation -->
        <?php else: ?>

<!-- no posts found -->
        <?php endif; ?>
        
        </div> <!-- row end-->



  </div> <!-- Main container end -->
</section> <!--section container end -->
</div>    <!-- Main Section Cont end -->
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


