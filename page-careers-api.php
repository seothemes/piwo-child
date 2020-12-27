<?php
/**
 *
 * Template Name: Careers Page API
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
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->


<!-- <link src="https://boards-api.greenhouse.io/v1/boards/{anexinet}/jobs"> -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

<style>
section .opening a {

  font-family: sans-serif;
}
</style>
  
	<section class="grndt-sec-nav ptb-60">
  <div class="container jc-center d-flex">
    <div class="row">
      <div class="col-md-12" style="color:#FFF; text-align:center;"> 
				<h3 style="margin-bottom:20px; color:#FFF; font-weight:700;">Big ideas. Big minds. Big heartss.</h3>
				<div class="container ta-center mt-20 d-flex">
        <div class="col-md-4 display-flex-j-a" style="text-align:right;">
          <img src="https://www.anexinet.com/wp-content/uploads/2020/03/focus-career.png" style="max-width:70px;" alt="Idea Icon">
        </div>
        <div class="col-md-4 display-flex-j-a">
          <img src="https://www.anexinet.com/wp-content/uploads/2020/03/heart-careers.png" style="max-width:70px;" alt="Think Icon">
        </div>
        <div class="col-md-4 display-flex-j-a" style="text-align:left;">
          <img src="https://www.anexinet.com/wp-content/uploads/2020/03/head-brain-careers.png" style="max-width:70px;" alt="Heart Icon">
				</div>
				</div>
      </div>
    </div>
  </div>
</section>
<div class="container-fluid" style="background-color:#f9f9f9; padding:60px 0">
  <div class="container">
      <!-- The script tag should live in the head of your page if at all possible -->
    <script type="text/javascript" async src="https://play.vidyard.com/embed/v4.js"></script>

<!-- Put this wherever you would like your player to appear -->
    <img
      style="width: 100%; margin: auto; display: block;"
      class="vidyard-player-embed"
      src="https://play.vidyard.com/XrfBVK4zn1o14Vj7xeh2Hd.jpg"
      data-uuid="XrfBVK4zn1o14Vj7xeh2Hd"
      data-v="4"
      data-type="lightbox"
      data-width="866"/>
    </div>
  </div>
<section>
  <div class="container">
    
    <div class="row">
      <div class="col-md-12 ta-center pt-40 pb-80">
        <p class="mb-40">Our culture helps us attract and retain the best. We motivate people<br>to do their best through work-life balance, challenging technology, and career growth.</p>
        <h3>Latest Opportunities</h3>
        <div id="grnhse_app"></div>
        <div id="dataId"></div>
        
        <script>
          

              $(document).ready(function() {

                 var jsonUrl='https://boards-api.greenhouse.io/v1/boards/anexinet/jobs';
                
                  $.getJSON(jsonUrl, function(data) {
                  
                  for(i = 0; i < data.length; i = i + 1){
                    console.log(data[i])
                   
                  }
                   
                  
                 });

                 $("#btn2").click(function(){
                  alert("HTML: " + $("#test").html());
                });

              });

             
        </script>
      </div>
    </div>
  </div>
</section>




  <!-- Section 3 Begin -->
<!-- <section class="third-cont container">
<div class="container"> 
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">JOB TITLE</th>
      <th scope="col">JOB TYPE</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody> -->
  
  <?php /*
    global $post;
    $args = array(
      'posts_per_page' => '-1',
      'post_type' => "anxt_careers",
      'order' => 'DESC'
      );

    global $the_query_category;
      $the_query_category = new WP_Query( $args );
      $count = 1;
        if ( $the_query_category->have_posts() ) : while ( $the_query_category->have_posts() ) : $the_query_category->the_post(); */
  ?>

<!--  -->
    <!-- <tr>
      <th scope="row"></th>
      <td><a href="<?php the_permalink();?>" target="_blank"><?php the_title(); ?></a></td>
      <td>Full Time</td>
      <td class="view-details"> <a href="<?php the_permalink();?>"target="_blank">View Details</a></td>
    </tr> -->

<!-- -->
        <?php //$count++; ?>

        <?php //endwhile; ?>

        <?php //wp_reset_query(); ?>
<!-- post navigation -->
        <?php // else: ?>

<!-- no posts found -->
        <?php // endif; ?>
        <!-- </tbody>
</table>
</div>
</section> -->


<!-- Section 3 End -->
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
            <img src="https://www.anexinet.com/wp-content/uploads/2020/03/medical.png" alt="Medical Logo"/>
            <h5>Medical</h5>
            <p>(includes in- and out-of network options)</p>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="https://www.anexinet.com/wp-content/uploads/2020/03/group-9@3x.png" alt="Prescription Logo Image"/>
            <h5>Prescription Drug Plan</h5>
          </div>   
          <div class="col-sm-6 col-md-3">
            <img src="https://www.anexinet.com/wp-content/uploads/2020/03/group-9@3x.png" alt="Dental Logo Image">
            <h5>Dental</h5>
          </div>   
          <div class="col-sm-6 col-md-3">
            <div class="img-cont">
          <img src="https://www.anexinet.com/wp-content/uploads/2020/03/vision.png" alt="Vision Logo Image"></div>
            <h5>Vision</h5>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="https://www.anexinet.com/wp-content/uploads/2020/03/flexible.png" alt="Spending Logo Image"/>
            <h5>Medical Flexible Spending Account</h5>
          </div>       
          <div class="col-sm-6 col-md-3">
            <img src="https://www.anexinet.com/wp-content/uploads/2020/03/dependant-care.png" alt="Depedant Logo Image"/>
            <h5>Dependant Care Flexible Spending Account</h5>
          </div>       
          <div class="col-sm-6 col-md-3">
            <img src="https://www.anexinet.com/wp-content/uploads/2020/03/401k.png" alt="401-k Logo Image"/>
            <h5>401K with Company Matching</h5>
          </div>       
          <div class="col-sm-6 col-md-3">
            <img src="https://www.anexinet.com/wp-content/uploads/2020/03/short-term.png" alt="Short Term Logo"/>
            <h5>Short-term Disability</h5>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="https://www.anexinet.com/wp-content/uploads/2020/03/long-term.png" alt="Long Term Logo"/>
            <h5>Long-term Disability</h5>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="https://www.anexinet.com/wp-content/uploads/2020/03/life-inssurance.png" alt="Life Insurance Logo Image"/>
            <h5>Life Insurance</h5>
            <p> (includes dependant coverage)</p>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="https://www.anexinet.com/wp-content/uploads/2020/03/holidays.png" alt="Vacation Logo"/>
            <h5>7 Paid Holidays</h5>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="https://www.anexinet.com/wp-content/uploads/2020/03/holidays.png" alt="PTO Logo"/>
            <h5>20 Discretionary Paid Time Off</h5>
            <p>(PTO) Days</p>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="https://www.anexinet.com/wp-content/uploads/2020/03/holidays.png" alt="Training Logo"/>
            <p>Based on your career plan and our company needs, employees are eligible for various technology and management training classes.</p>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="https://www.anexinet.com/wp-content/uploads/2020/03/snacks.png" alt="Snacks Logo"/>
            <p>Always snack food in the kitchens & free soda in the fridge.</p>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="https://www.anexinet.com/wp-content/uploads/2020/03/free-gym.png" alt="Gym Logo"/>
            <h5>Free gym access on our campus.</h5>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="https://www.anexinet.com/wp-content/uploads/2020/03/work-life-balance.png" alt="Balance Logo"/>
            <p>Work life balance is a big part of our culture.</p>
          </div>
                     
        </div>
      </div>
    </div>
  </section>
<!-- Section 3 ends-->

	<?php if(!$full_pages == true) {
		echo '</div>';
	}
	?>
</div>

<?php endwhile; ?>

<!--?php
$xml=simplexml_load_file("https://app.clearcompany.com/api/v2/jobs/anexinet/xml/") or die("Error: Cannot create object");
foreach($xml->children() as $jobs) { 
	// echo "<div> 
	 				// <tr>
					//  <td> $jobs->PositionTitle . ", " </td>
					//  <td> $jobs->City  </td> 
					//  <td> $jobs->LegacyCareersUrl  </td>
					// </tr>
					// </div>";
		
		
} 
?> 
-->


<style>
  body #wrapper .level-0 .opening{
    display: flex !important;
    align-items: center !important;
    justify-content: space-between !important;
  }
  .accessible .opening{
    display: flex !important;
    align-items: center !important;
    justify-content: space-between !important;
  }
  .level-0 div{
    display: flex !important;
    align-items: center !important;
    justify-content: space-between !important;
  }
  </style>
<script src="https://boards.greenhouse.io/embed/job_board/js?for=anexinet"></script>


<!-- Anexinet Main Form Begin -->
<?php include('form.php'); ?> 
<!-- Anexinet Main Form End -->
</div>
<?php get_footer();