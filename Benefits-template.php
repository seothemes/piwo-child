<?php
/**
 *
 * Template Name: benefits Template
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
        <h4>Anexinet attracts and retains the best and brightest by offering a flexible employee benefits program to our full-time employees. Benefits include:
</h4>
      </div>
    </div>
  </div>
</section>
<!-- Gradient Jumbotron Module End -->
  <!--Section3 begins-->
  <section class="part-frth-sect container-fluid">
    <!-- <div class="container">
      <div class="part-btn-cont">
        <button class="part-btn-1">All</button>
        <button class="part-btn-1">Customer Engagement</button>
        <button class="part-btn-1">Enterprise Mobility</button>
        <button class="part-btn-1"> Cloud & Hybrid IT</button>
        <button class="part-btn-1">Analytics & Insights</button>
      </div>
    </div> -->
    <div class="benefits-all-part-cont">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <img src="https://www.anexinet.com/wp-content/uploads/2018/09/ic-medical.png" alt="Medical Logo"/>
            <h5>Medical</h5>
            <p>(includes in- and out-of network options)</p>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="https://www.anexinet.com/wp-content/uploads/2018/09/ic-presciption.png" alt="Prescription Logo Image"/>
            <h5>Prescription Drug Plan</h5>
          </div>   
          <div class="col-sm-6 col-md-3">
            <img src="https://www.anexinet.com/wp-content/uploads/2018/09/ic-dental.png" alt="Dental Logo Image">
            <h5>Dental</h5>
          </div>   
          <div class="col-sm-6 col-md-3">
            <div class="img-cont">
          <img src="https://www.anexinet.com/wp-content/uploads/2018/09/ic-vision.png" alt="Vision Logo Image"></div>
            <h5>Vision</h5>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="https://www.anexinet.com/wp-content/uploads/2018/09/ic-dependant.png" alt="Spending Logo Image"/>
            <h5>Medical Flexible Spending Account</h5>
          </div>       
          <div class="col-sm-6 col-md-3">
            <img src="https://www.anexinet.com/wp-content/uploads/2018/09/ic-dependant.png" alt="Depedant Logo Image"/>
            <h5>Dependant Care Flexible Spending Account</h5>
          </div>       
          <div class="col-sm-6 col-md-3">
            <img src="https://www.anexinet.com/wp-content/uploads/2018/09/ic-401-k.png" alt="401-k Logo Image"/>
            <h5>401K with Company Matching</h5>
          </div>       
          <div class="col-sm-6 col-md-3">
            <img src="https://www.anexinet.com/wp-content/uploads/2018/09/ic-short-term.png" alt="Short Term Logo"/>
            <h5>Short-term Disability</h5>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="https://www.anexinet.com/wp-content/uploads/2018/09/ic-long-term.png" alt="Long Term Logo"/>
            <h5>Long-term Disability</h5>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="https://www.anexinet.com/wp-content/uploads/2018/09/ic-insurance.png" alt="Life Insurance Logo Image"/>
            <h5>Life Insurance</h5>
            <p> (includes dependant coverage)</p>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="https://www.anexinet.com/wp-content/uploads/2018/09/ic-holidays.png" alt="Vacation Logo"/>
            <h5>7 Paid Holidays</h5>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="https://www.anexinet.com/wp-content/uploads/2018/09/ic-pto.png" alt="PTO Logo"/>
            <h5>20 Discretionary Paid Time Off</h5>
            <p>(PTO) Days</p>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="https://www.anexinet.com/wp-content/uploads/2018/09/ic-long-term-copy.png" alt="Training Logo"/>
            <p>Based on your career plan and our company needs, employees are eligible for various technology and management training classes.</p>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="https://www.anexinet.com/wp-content/uploads/2018/09/ic-food.png" alt="Snacks Logo"/>
            <p>Always snack food in the kitchens & free soda in the fridge.</p>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="https://www.anexinet.com/wp-content/uploads/2018/09/ic-gym.png" alt="Gym Logo"/>
            <h5>Free gym access on our campus.</h5>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="https://www.anexinet.com/wp-content/uploads/2018/09/ic-balance.png" alt="Balance Logo"/>
            <p>Work life balance is a big part of our culture.</p>
          </div>
                     
        </div>
      </div>
    </div>
  </section>
<!-- Section 3 ends-->
<!-- Anexinet Main Form Begin -->
<?php include('form.php'); ?> 
<!-- Anexinet Main Form End -->
<?php if(!$full_pages == true) {
		echo '</div>';
	}
	?>
</div>

<?php endwhile; ?>
<?php get_footer();