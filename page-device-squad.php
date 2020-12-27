<?php
/**
 *
 * Template Name: Squad Template
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
	
	}
	?>


  <!-- Section 3 Begin -->
<section class="third-cont container">
  <div class="row">
    <div class="img-p-cont">
      <div class="col-sm-4 col-md-3 ">
        <div class="img-cont">
          <img src="https://www.anexinet.com/wp-content/uploads/2018/10/steve-brykman.png" alt="Steven Brykman"/>
        </div>
      </div>
      <div class="col-sm-8 col-md-9">
        <p>Steven is a Sr. Digital Strategist focused on Enterprise Mobile Products, with a diverse background in literature and humor. He has helped countless Fortune 500 companies define the direction of their digital campaigns and web/mobile applications. Additionally, he co-founded Apperian, a Boston-based mobile technology company.</p><br><br>
        <!-- <a href="https://itunes.apple.com/us/podcast/device-squad-enterprise-mobility/id1086211069" target="_blank"> <p>Find All Our Episodes on iTunes →</p></a> -->
      </div>
      
    </div>
    <div class="img-p-cont">
        <div class="col-sm-4 col-md-3 ">
          <div class="img-cont">
            <img src="https://www.anexinet.com/wp-content/uploads/2020/02/glenn.jpeg" alt="Glen Gruber"/>
          </div>
        </div>
        <div class="col-sm-8 col-md-9">
          <p>Glenn Gruber is a Sr. Digital Strategist. He leads enterprise mobile strategy engagements to help companies determine the best way to integrate mobile into their business -- both from a consumer-facing perspective, but also how to leverage mobile to empower employees to be more productive and improve service delivery through the intelligent use of mobile devices and contextual intelligence. Glenn has helped a wide range of enterprises on how to leverage mobile within their business including Bank of Montreal, Dubai Airports, Carnival Cruise Line and Merck. He is a leading voice in the travel sector as a contributing Node to Tnooz where he writes about how mobile and other emerging technologies are impacting the travel sector and a frequent speaker at industry events.</p><br><br>
          <!-- <a href="https://itunes.apple.com/us/podcast/device-squad-enterprise-mobility/id1086211069" target="_blank"> <p>Find All Our Episodes on iTunes →</p></a> -->
        </div>
      </div>

		<div class="col-md-12">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Date</th>
          <th scope="col">Link</th>
        </tr>
      </thead>
    <tbody> 
<!-- begins query -->
 <?php
    global $post;
    $args = array(
      'posts_per_page' => '-1',
      'cat' => "1828",
      'order' => 'DESC'
      );

    global $the_query_category;
      $the_query_category = new WP_Query( $args );
      $count = 1;
        if ( $the_query_category->have_posts() ) : while ( $the_query_category->have_posts() ) : $the_query_category->the_post();
  ?>
<!-- ends query -->
<!-- begin content -->
    <tr>
      <td><a href="<?php the_permalink();?>"><p><?php the_title(); ?></p></a></td>
      <td><p><?php the_date(); ?></p></td>
      <td><a class="blue" href="<?php the_permalink();?>"><p style="
    color: #2b78ff;">Listen Now</p></a> </td>
    </tr>  
<!-- ends content -->
 
        <?php $count++; ?>

        <?php endwhile; ?>

        <?php

        wp_reset_query(); ?>
<!-- post navigation -->
        <?php else: ?>

<!-- no posts found -->
        <?php endif; ?>

        </tbody>
</table>
    </div>
  
    </div>
  </div>

</section>
<!-- Section 3 End -->
<!-- Anexinet Main Form Begin -->
<?php include('form.php'); ?> 
<!-- Anexinet Main Form End -->
    
	

<?php endwhile; ?>
<?php get_footer();