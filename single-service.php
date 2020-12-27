<?php
/**
 *
 * Template Name: Services Template
 *
 * @package      Page Template
 * @author       Luis Rosales <lrosales@anexinet.com>
 * @copyright    Copyright (c) 2018, Anexinet
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
 */

	?>

<?php get_header(); ?>
<div id="ks_top"></div>
<?php 

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

<style>
	html{
		scroll-behavior: smooth !important;
	}
	h2{
		font-size:20px;
	}
	h3{
		font-size:18px;
		font-weight: 700;
	}
	p{
		color:#3d3d3b;
	}
	.kickstart-tag{
		position: absolute;
    top: -450px;
    left: 18.1%;
    max-width: 200px;
	}
	.cta-cover-img img{
       max-width:400px;
	}
       .post-intro-wrapper{
      padding-top: 54px !important;
    }
	.mb-60{
		margin-bottom: 60px;
	}
	.main-class .col-md-6 img{
		width:100%;
		max-width:350px;
	}
	.f-style-italic{
		font-style: italic;
	}
	.f-size-30{
		font-size:30px;
	}
	.anxnt-blue{
		color:#0f4c83;
	}
	#text-l-img-r{
		margin-bottom:60px;
	}
	.d-flex-align-center{
		display: flex;
    flex-direction: column;
    justify-content: center;
	}
	#text-l-img-r .col-md-6{
    display: flex;
    flex-direction: column;
		align-items: center;
	}
	#text-l-img-r .col-md-6 p{
		margin-bottom: 20px;
    max-width: 411px;
	}
	#text-l-img-r .col-md-6 img{
		margin-bottom: 20px;
    max-width: 300px;
		width: 100%;
	}
	#text-l-img-r .col-md-6 .img-desktop{
		max-width: 478px;
		text-align:center;
		align-items: center;
	}
	.main-class .col-md-12{
		display: flex;
    justify-content: center;
	}

	.form-section-complementary .lp-form-header p{
    color:#fff;
		text-align:left;
	}
	.form-section-complementary label{
     color: #FFF;
	}
	.form-section-complementary{
		background-color: #0b4d85;
    padding: 30px 60px;
	}
	.form-section-complementary .col-md-6{
		display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
	}
	.form-section-complementary .text-beside-form p{
		color: white;
    max-width: 437px;
    font-size: 16px;
	}

	.big-q-text{
		font-size: 16px;
    font-style: italic;
    font-weight: 500;
	}
	.big-quote-client{
		color: #187bcd;
    font-weight: 700;
    margin-top: 20px;
	}
	.big-quote{
		background-color: #f7f8fa;
    padding: 40px;
    position: relative;
    margin-top: 60px;
	}
	.big-quote img{
		position: absolute;
    top: -20px;
	}
	.square-quote{
		background-color: #f7f8fa;
    padding: 46px;
    max-width: 345px;
	}
	.square-quote img{
		position: absolute;
    top: -21px;
	}
	.square-quote-div-1{
		font-style: italic;
    font-weight: 500;
    max-width: 240px;
	}
	.square-quote-div-2{
		color: #187bcd;
    margin-top: 30px;
    font-weight: 700;
    max-width: 285px;
	}
	
	.main-class .row{
		margin-top: 60px;
	}
	.main-class .col-md-5{
		display: flex;
    justify-content: flex-end;
	}

	.three-imgs-new{
		padding:40px 0;
	}
	.what-title-column{
		margin-bottom:40px;
	}
	.icon-title-desc img{
		margin-bottom: 12px;
	}
	.icon-title-desc{
		margin-bottom:30px;
	}
	.page-id-59513 .form-styles .wrapperContainer:nth-child(6) {
		display:none;
}
 .page-id-59513 .form-styles	.lp-form-header{
   margin-bottom: 0;
	}
	.page-id-59513 .form-styles	select{
   margin-bottom: 0;
	 border:none;
	}
	.aws-solutions .col-md-4{
		display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
    margin: 20px 0;
	}
	.aws-solutions .col-md-12{
		text-align: center;
    margin-top: 40px;
	}
	.aws-solutions .col-md-12 h2{
		font-size: 26px;
	}
	.aws-solutions .col-md-12 h3{
		font-size: 18px;
    font-weight: 600;
	}
	.aws-solutions .col-md-6{
    background-color: #f7f8fa;
    padding: 40px;
    max-width: 500px;
    margin-top: 60px;
    margin-right: 40px;
	}
	.aws-solutions .col-md-6 .img-cont{
    margin-bottom:20px;
	}
	.aws-solutions .col-md-6 h2{
    font-size: 20px;
	}
	.aws-solutions .col-md-6 p{
    color: #6e6e68;
		line-height: 1.4;
	}
	.aws-solutions .col-md-6 ul{
    color: #6e6e68;
    font-style: italic;
    margin-top: 12px;
	}
		
.single-post-content{
	
}
.cta-cover-img{
		 text-align:center;
	 }
.ks-main-desc {
	position: absolute;
	top: -12vw;
	left: 9.5vw;
	max-width:400px;
}
.ks-main-desc h5 {
	color: white;
	max-width: 700px;
	font-size: 16px;
}
.ks-second-desc p{
max-width:900px;
margin: 0 auto;
color:#6e6e68;
max-width:780px;
}
.typo-gray p{
	color:#f7f8fa;
}
.arrow-img{
	max-width: 26px;
	width: 100%;
	height: 100%;
	margin-right: 12px;
}
.text-left-img-right p{
color:#6e6e68;
}
.text-left-img-right{
	max-width: 430px;
	margin-right:0;
}
.our-process p{
	padding: 20px 0;
	font-family: Montserrat;
	font-weight: 600;
	font-size: 18px;
	color: #6e6e68;
	max-width: 700px;
	margin: 0 auto;
}
.text-l-img-r .right-img {
	text-align:center;
}
.text-l-img-r .right-img img {
	max-width:350px;
}

.cta-cover h2{
	margin-bottom: 20px;
	font-size:20px;
}
.horizontal-info .container{
	padding-top: 60px;
	padding-bottom:60px;
}
.horizontal-info .hori-img{
	margin-right: 20px;
}
.horizontal-info .hori-img img{
	max-width:60px;
	max-height: 60px;
}
.horizontal-info .hori-info h5{
	margin-bottom:6px;
	font-size:20px;
}
.horizontal-info h2{
	margin-bottom:40px !important;
}
.hori-cont{
	display:flex;
	margin-bottom:20px;
}
.what-ul-get h4{
	text-align:center;
	margin-bottom:60px;
}
.what-ul-get .row{
	justify-content:space-evenly;
}
.what-ul-get .col-md-4{
	margin-bottom:40px;
}
.what-info-cont h5{
	font-size:20px;
}
.hori-info p{
	color:#6e6e68;
}
.what-img-cont{
	margin-right: 20px;
	max-width: 50px;
	margin-bottom:20px;
}
.what-info-cont p{
	margin-top: 20px;
	color: #6e6e68;
}
.banner-cta{
	background-color: #0b4d85;
	padding: 80px 0;
	color: white !important;
}
.banner-cta p{
	color: white !important;
}
.banner-cta h3{
	color: white;
	font-weight: 700;
	font-size: 30px;
}
.banner-cta p{
color: white;
	max-width: 482px;
}
.banner-cta a{
	padding: 20px 24px;
	background-color: #fd8949;
	color: white;
	font-weight: 700;
	font-family: Montserrat;
	cursor: pointer;
}
.single-kickstart_lp .post-intro-wrapper{
	height:550px;
}
.form-styles{
		position: absolute;
	 left: 59vw;
	 top: -394px;
	 right: 32px;
	 background-color: #ffffffc4;
	 max-width: 474px;
	}
	form{
	padding: 12px !important;
	}
	.post-intro-wrapper h1.post-title{
		max-width: 400px !important;
	}
	div[data-editorblocktype="SubmitButtonBlock"] {
    width: 100% !important;
}
	.lp-form-button{
		background-color:#a4ca53;
		border:none;
		color:#FFF;
    margin-top: -10px;
	}
	.form-styles input{
		margin-bottom:0;
		padding: 12px !important;
	}


	.form-styles .actions{
		margin-top: 8px;
		padding:0 !important;
		margin-left:0 !important;
	}
	.form-styles .field{
	 margin-bottom:2px !important;
	}




 .blue-banner{
	background-color: #0f4c83;
	padding: 60px 0;
 }
 .blue-banner h3{
	color: white;
	font-weight: 700;
	text-align: center;
	font-size: 30px;
 }
 .blue-banner h5{
	color: white;
	font-size: 18px;
	text-align: center;
	font-weight: 600 !important;
}

.kickstart-quote{
padding-top: 80px;
padding-bottom:80px;
}
.kickstart-quote .quote-img{
width: 35px;
}
.kickstart-quote h5{
font-size: 20px;
	font-weight: 600 !important;
	font-style: italic;
	color: #3d3d3b;
	max-width: 900px;
	margin-left: 40px;
	line-height: 1.3;
}
.kickstart-quote span{
color: #0f4c83;
}
.trusted{
text-align: center;
	padding-top: 80px;
	padding-bottom:80px;
}
.trusted h4{
margin-bottom: 40px;
	font-size: 26px;
}
.trusted .col-md-2{
display: flex;
	align-items: center;
	justify-content: space-evenly;
	filter: grayscale(1);
}
.video-section{
padding-top:80px;
padding-bottom:80px;
}
.video-section .col-md-6{
display: flex;
justify-content: center;
align-items: center;
}
.video-section .col-md-6 h2{
max-width: 234px;
}
.four-columns-section{
padding-top:80px;
padding-bottom:80px;
}
.four-columns-section h3{
font-weight: 700;
font-size: 22px;
margin: 0 auto;
max-width: 475px;
margin-bottom: 60px;
text-align: center;
}
.four-columns-section img{
max-width:140px;
}
.four-columns-section .four-columns-info{
text-align: center;
	max-width: 222px;
	margin: 0 auto;
}
.four-columns-section .four-columns-info p{
font-family:Montserrat;
margin-top: 30px;
	color: #6e6e68;
	font-weight:600;
}
.three_q_info_img{
padding-top: 80px;
padding-bottom: 80px;
}
.three_q_info_img p{
max-width: 597px;
	color: #6e6e68;
}
.green-checkmark{
display:flex;
align-items:center;
margin-bottom: 20px;
}
.green-checkmark img{
margin-right:12px;
}
.single-kickstart_lp .green-checkmark p{
margin-bottom:0 !important;
}

.anxnt-main-form{
	display:none;
}
.onFormSubmittedFeedbackButton{
	display:none;
}
.onFormSubmittedFeedback{
	background: #ffffff0f;
}
@media screen and (max-width:768px){
	.btn-cont-banner-cta{
		margin-top:80px;
	}
	.main-class .col-md-5{
		justify-content: center;
    margin-top: 60px;
		}
		#text-l-img-r .col-md-6 .img-desktop{
			max-width: 299px;
		}
	}

	@media screen and (max-width:1000px){
		.form-styles{
			position:initial;
			background-color: #eaeaea73;
			margin: 0 auto;
			margin-top: 8%;
		}
		.rightcolumn{
			width:100% !important;
		}
		.leftcolumn{
			width:100% !important;
		}
	}

	</style>

<div class="classic page-bg-color <?php echo esc_attr($class);?> <?php echo esc_attr($full_class); ?>">
	<?php if(!$full_pages == true) {
		echo '<div class="row">';
	}
	?>
		<div class="<?php echo esc_attr($col_class);?> blog-content">
			<?php
			the_content();
			wp_link_pages( array(
				'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'piwo' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			) );
			?>
		</div>
		<div class="small-12 columns small-centered blog-content test">
			
			<?php
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
		</div>
	<?php if(!$full_pages == true) {
		echo '</div>';
	}
	?>
</div>
<?php endwhile; ?>
<!-- Anexinet Main Form Begin -->
<?php include('form.php'); ?> 
<!-- Anexinet Main Form End -->
<?php get_footer(); ?>
