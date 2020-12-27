<?php
/**
 * The template for displaying all single White Papers pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package      Page Template
 * @author       Luis Rosales <lrosales@anexinet.com>
 * @copyright    Copyright (c) 2018, Anexinet
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */



get_header(); ?>
<?php	while ( have_posts() ) : the_post(); ?>

<style>
	.mw-250{
		max-width:250px;
	}
.content{
			color:#FFF;
			font-size: 16px !important;
			margin-bottom:20px;
		}
		.content h2,h3,h4,h5,p,ul{
      color:#FFFFFF;
		}
		div[data-editorblocktype="SubmitButtonBlock"] {
    width:100%;
}
		.content h5{
      font-size;:20px;
			margin-bottom:20px;
		}
		.ebook-title h2{
			color:#FFFFFF;
			margin-top: 20px;
			font-size:30px;
		}
	.ebook-row-cont{
		padding-top: 60px;
    padding-bottom: 80px;
	}
		.ebook-logo{
			max-width:250px;
			margin-bottom:40px;
		}
		.ebook-tag{
			max-width:160px;
		}
		.content{
			padding:0 !important;
		}
		.secondary-img{
			max-width: 222px;
      margin-top: 40px;
		}
		.form-styles form{
		background-color: #ffffffb0;
		}
		.form-styles button{
			background-color: #ff924b;
      border: none;
		  cursor:pointer;
		}
		.onFormSubmittedFeedback .onFormSubmittedFeedbackButtonSuccess{
			display:none;
		}
		
	.form-styles .lp-form-header p{
			color:#000 !important;
		}
	
		
		.main-nav  .link-wrapper a{
			color:black !important;
		}
		.anxnt-main-form{
			display:none;
		}
		</style>

<div class="content single-post">
	<?php 
	// if(function_exists('get_field')) {
	// 	$intro_bg = $intro_color = $breadcrumb_bg = $breadcrumb_color = '';
	// 	$intro = get_field('piwo_post_intro_section','option');
	// 	$breadcrumb = get_field('piwo_post_breadcrumbs','option');
	// 	$intro_bg = get_field('piwo_post_intro_bg','option');
	// 	$intro_color = get_field('piwo_post_intro_color', 'option');
	// 	$breadcrumb_bg = get_field('piwo_post_breadcrumbs_intro_bg','option');
	// 	$breadcrumb_color = get_field('piwo_post_breadcrumbs_color', 'option');
	// 	if($intro == true ) {
	// 		echo piwo_intro_section($intro_bg,$intro_color);	
	// 	}
	// 	if($breadcrumb == 'true') {
	// 		piwo_breadcrumb($breadcrumb_bg,$breadcrumb_color);	
	// 	} 
	// } else {
	//  echo piwo_intro_section();	
	// 	piwo_breadcrumb();	
	// }
	?>

	

	<div class="row" style="background-image: url('<?php the_field('background_image_one_page')?>'); background-size: cover;">

		<div class="single-post-content small-12 columns container <?php echo esc_attr( $post_class ); ?>">
			<!-- <div class="post-content-wrapper"> -->
		  	<!-- <div class="post-header hide"> -->
				<?php 
					// POST FORMAT - IMAGE
					// if($postFormat == 'image' || !function_exists('get_field')) : ?>
					 <?php //if ( has_post_thumbnail() ) : ?>
					<!-- // 	<div class="post-images"> -->
					 		<?php
					// 		$image = get_post_thumbnail_id();
					// 		$image_url = wp_get_attachment_image_src($image, 'blog-single');
					// 		echo '<img class="b-lazy" height="'.esc_attr($image_url[2]).'" width="'.esc_attr($image_url[1]).'" src="'.piwo_image_preloader($image_url[1],$image_url[2]).'" data-src="'.esc_url($image_url[0]).'"/>';
							?>
				<!-- </div> -->
					<?php// endif; ?>
		    	<?php 
					// POST FORMAT - AUDIO
				//	elseif ($postFormat == 'audio') : ?>
					<?php// $audioUrl = get_field('piwo_post_url'); 
					?>
					<!-- <div class="piwo-post-audio">
					<?php //echo wp_audio_shortcode( array('src' => esc_url($audioUrl), 'autoplay' => '', 'preload'  => 'none')); ?>
					</div> -->
				<?php //endif; ?>
			<!-- </div> -->


        <div class="row ebook-row-cont">
				  <div class="col-md-7">

					<?php if(get_field('logo_one_page')){ ?>
            <div class="ebook-logo">
						  <img src="<?php the_field('logo_one_page') ?>" alt="Logo">
				   	</div>		
					  <?php	}; ?>

					  <div class="ebook-tag">
							<img src="<?php the_field('tag_image_one_page') ?>" alt="eBook Tag">
						</div>
					

						<div class="ebook-title">
							<h2><?php the_title(); ?></h2>
						</div>

						<div class="">
							<div class="content">
								<?php 
									the_content();
									wp_link_pages( array(
										'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'piwo' ),
										'after'       => '</div>',
										'link_before' => '<span class="page-number">',
										'link_after'  => '</span>',
									) );
								; ?>
							</div>
						</div>

						<?php if(get_field('cover_one_page')){ ?>
						<div class="cover-img mw-250">
							<img src="<?php the_field('cover_one_page') ?>" alt="Cover">
						</div>
            <?php	}; ?>

						<?php if(get_field('secondary_img_one_page')){ ?>
						<div class="secondary-img">
							<img src="<?php the_field('secondary_img_one_page') ?>" alt="Cover">
						</div>
            <?php	}; ?>

			    </div>
					<div class="col-md-5 form-styles">
					<?php the_field('form_one_page') ?>
					</div>
				</div>


	  	<!-- </div> -->

	  </div>
  </div>

	

<?php endwhile; ?>

<!-- <?php //wpbeginner_numeric_posts_nav(); ?> -->
<!-- Anexinet Main Form Begin -->
<?php include('form.php'); ?> 
<!-- Anexinet Main Form End -->
<?php get_footer();