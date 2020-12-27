

  <?php
/**
 *
 * Template Name: Podcasts Template
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
<section class="third-cont-podcast container">
  <div class="text-cont-podcast" style="padding:20px 0;">
    <h3 style="font-weight:700">Latest Podcast</h3>
  </div>

  <?php
    global $post;
    $args = array(
      'posts_per_page' => '1',
      'cat' => '17',
      'order' => 'DESC'
      );

    global $the_query_category;
      $the_query_category = new WP_Query( $args );
      $count = 1;
        if ( $the_query_category->have_posts() ) : while ( $the_query_category->have_posts() ) : $the_query_category->the_post();
  ?>

  <div class="post-cont-podcast">
    <div class="cat-date-cont-podcast">
      <!-- <div class="the-cat-podcast">
        <p><?php the_category(); ?></p>
      </div>  -->
      <div class="title-cont-podcast" style="padding:20px 0;">
        <a href="<?php the_permalink();?>"> <h4><?php the_title(); ?></h4> </a>
      </div>
      <div class="title-cont-podcast">
        <?php $music_file = the_field("audio_url");
         echo do_shortcode('[audio mp3=' . $music_file . ' loop = "off" autoplay = 0]'); ?>
      </div>
     
      <div class="date-cont-podcast">
        <p><?php the_date();?></p>
      </div>
    </div>
    
     <div class="cont-btn" style="margin-top:30px;">
      <a href="<?php the_permalink();?>" class="btn"> Listen Now</a>
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
    <div class="title-cont">
      <h4>Podcast Contributors</h4>
     </div>
    <div class="row">
      <div class="col-md-6 col-lg-3">
        <div class="content-cont">
          <div class="img-cont">
            <a href="https://www.anexinet.com/?page_id=50678"> <img src="https://www.anexinet.com/wp-content/uploads/2020/05/2020-AIM-Podcast-Cover-Art.png" alt="Anexipod Channel"> </a>
           </div>

          <div class="info-cont">
            <div class="title-cont">
              <a href="https://www.anexinet.com/?page_id=50678"><h4>Infrastructure Modernization</h4></a>
            </div>
            <div class="excerpt">
              <a href="https://www.anexinet.com/?page_id=50678"> <p>This monthly podcast features industry professionals and subject matter experts, and covers the latest tech news, issues, and best practices to help your architectural transformation.</p> </a>
            </div>
            <div class="btn-cont anexipod-cont">
              <a href="https://www.anexinet.com/?page_id=50678">View More →</a>
            </div>
           </div> <!-- end info container-->

         </div> <!-- end content container -->
      </div>  <!-- col 4 -->
      <div class="col-md-6 col-lg-3">
        <div class="content-cont">
          <div class="img-cont">
            <a href="https://www.anexinet.com/?page_id=50731"> <img src="https://www.anexinet.com/wp-content/uploads/2019/03/Buffer-Overflow-Podcast-Cover.png" alt="Buffer OverFLowChannel"> </a>
           </div>

          <div class="info-cont">
            <div class="title-cont">
              <a href="https://www.anexinet.com/?page_id=50731"><h4>Buffer Overflow</h4></a>
            </div>
            <div class="excerpt">
              <a href="https://www.anexinet.com/?page_id=50731"> <p>Keep a pulse on the latest tech news. Stay informed and stay relevant with Buffer Overflow.</p> </a>
            </div>
            <div class="btn-cont bffr-ovrflw-cont">
              <a href="https://www.anexinet.com/?page_id=50731">View More →</a>
            </div>
           </div> <!-- end info container-->

         </div> <!-- end content container -->
      </div>  <!-- col 4 -->
      <div class="col-md-6 col-lg-3">
        <div class="content-cont">
          <div class="img-cont">
            <a href="https://www.anexinet.com/?page_id=50744"> <img src="https://www.anexinet.com/wp-content/uploads/2019/12/the_modern_digital_enterprise.png" alt="Device Squad Channel"> </a>
           </div>

          <div class="info-cont">
            <div class="title-cont">
              <a href="https://www.anexinet.com/?page_id=50744"><h4>The Modern Digital Enterprise</h4></a>
            </div>
            <div class="excerpt">
              <a href="https://www.anexinet.com/?page_id=50744"> <p>This monthly podcast covers all aspects of Digital Transformation, including strategy, mobility, security, development, design, testing, emerging tech and the occasional backyard chicken.</p> </a>
            </div>
            <div class="btn-cont dvc-squad-cont">
              <a href="https://www.anexinet.com/?page_id=50744">View More →</a>
            </div>
           </div> <!-- end info container-->

         </div> <!-- end content container -->
      </div>  <!-- col 4 -->
<!--
      <div class="col-md-6 col-lg-3">
        <div class="content-cont">
          <div class="img-cont">
            <a href="https://www.anexinet.com/?page_id=50754"> <img src="https://www.anexinet.com/wp-content/uploads/2018/10/group-8.jpg" alt="BreakPoint Club Channel"> </a>
           </div>

          <div class="info-cont">
            <div class="title-cont">
              <a href="https://www.anexinet.com/?page_id=50754"><h4>The Breakpoint Club</h4></a>
            </div>
            <div class="excerpt-2">
              <a href="https://www.anexinet.com/?page_id=50754"> <p>This is a tech focused podcast where we talk with thought leaders in the software space on a wide range of topics that relate to technology solutions, and specifically software development.</p> </a>
            </div>
            <div class="btn-cont bp-club-cont">
              <a href="https://www.anexinet.com/?page_id=50754">View More →</a>
            </div>
           </div> 

         </div> 
      </div>  -->
      
    </div> <!-- row -->
  </div> <!--  container -->
</section> <!-- section -->
<!--Section 4 Ends-->
    
</div>


<!-- Anexinet Main Form Begin -->
<?php include('form.php'); ?> 
<!-- Anexinet Main Form End -->

	<?php if(!$full_pages == true) {
		echo '</div>';
	}
	?>
</div>

<?php endwhile; ?>

<?php get_footer(); ?>