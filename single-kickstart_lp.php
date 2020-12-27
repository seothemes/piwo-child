<?php
/**
 *
 * Template Name: Kickstart Landing page Template
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
	<div class="kickstart-tag">
		<img src="/wp-content/uploads/2020/06/btn-kickstarter.png" alt="Kickstart Tag">
	</div>

	<style>
		html{
			scroll-behavior: smooth !important;
		}
		.parallax-header-background{
			background-position:left !important;
		}
		.post-intro-wrapper h1.post-title{
          font-size:34px !important;
		}
    .post-intro-wrapper{
      padding-top: 54px !important;
    }
		.partner-logos-cont{
			display: flex;
      justify-content: center;
      margin-top: 60px;
		}
		.partner-logos-cont img{
			max-width:250px;
		}
		.kickstart-tag{
		  position: absolute;
		  top: 77px;
          left: 17.5vw;

		}
		.post-intro-wrapper .intro-subtitle{
			font-size:16px !important;
		}
	.single-post-content{
	
	}
	.column-aligned{
		align-items: start !important;
    flex-direction: column;
	}
	.column-aligned p{
		margin:12px 0;
		color: #6e6e68;
	}
	ul{
		color:#6e6e68
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
	color:##6e6e68;
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
	.two-columns-center{
    padding: 60px 0;
	}
	.two-columns-center .col-md-6{
		text-align: center;
    margin-bottom: 60px;
	}
	.two-columns-center .col-md-6 h3{
		font-size: 20px;
    font-weight: 700;
    margin-top: 20px;
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
	h2{
		font-size:24px;
	}
	.what-we-do .cont-btn{
		margin-top:40px;
	}
	.what-we-do .img-what {
		align-items: center;
    max-width: 300px;
    margin: 0 auto;
	}
	.cta-cover h2{
		margin-bottom: 20px;
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
	/* What you will get new */
	.icon-title-desc {
    align-items: flex-start;
    display: flex;
    margin: 30px 0;
    margin-top: 60px;
}
.icon-title-desc img {
    max-width: 60px;
}
.icon-title-desc div {
    margin-left: 20px;
}
.icon-title-desc p {
    margin-top: 8px;
    color: #6e6e68;
}
/* what column section */
.what-title-column{
	margin-bottom: 40px;
  text-align: center;
}
.what-ul-column h3{
	font-size: 18px;
  font-weight: 700;
}
.tree-imgs .col-md-4{
	display:flex;
	align-items: center;
  justify-content: center;
}
.tree-imgs {
	padding:40px 0;
}
.pantone{
	color:#0b4d85;
}
/* / What column section */
	/* 7What you will get  new */
	.what-ul-get{
		background-color: #f7f8fa;
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
	.post-content-wrapper header{
		top: 64px !important;
        position: absolute;
	}
	.form-styles{
      position: absolute;
     left: 59vw;
     top: 1.2%;
     right: 32px;
     padding: 20px;
     max-width: 474px;
    }
    .form-styles input{
      margin-bottom:0;
			padding: 12px !important;
    }
		div[data-editorblocktype="SubmitButtonBlock"]{
			margin:inherit;
			width:100%;
		}
  
  
		.form-styles .field{
     margin-bottom:2px !important;
    }
  
    .form-styles form{
		background-color: #ffffffb0;
		}
		.form-styles button{
			background-color: #ff924b;
      border: none;
			cursor:pointer;
			color:#FFF;
		}
		.onFormSubmittedFeedback .onFormSubmittedFeedbackButtonSuccess{
			display:none;
		}
		
	
	.form-styles .lp-form-header p{
			color:#000 !important;
		}
		.icon-title-desc-cont h3{
		  font-size: 20px;
      font-weight: 700;
		}
   .input{
     margin-bottom:8px;
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
	 .cta-cover .cont-btn{
		 margin-top:40px;
	 }
	 .cta-cover-img{
		 text-align:center;
	 }
	 .cta-cover-img img{
		 max-width:300px;
	 }
	 .ta-center{
		 text-align:center;
	 }
	 .margin-cero-auto{
		 margin:0 auto;
	 }
	 .mb-20{
     margin-bottom:20px !important;
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
.three-imgs{
	background-color: #f3f3f3;
  padding: 60px 0;
}
.three-imgs .col-md-4{
	text-align: center;
  font-weight: 800;
}
.wireles-text-img{
	padding-top: 60px;
    padding-bottom: 60px;
}
.wireles-text-img p{
	color: #6e6e68;
}

.wireles-text-img img{
	margin-top:40px;
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
.video-section .text-cont{
	display:flex;
  justify-content: center;
  align-items: center;
}

.video-section .col-md-6 h2{
	max-width: 72%;
	font-size:20px;
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
	align-items:start;
	margin-bottom: 12px;
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

    @media screen and (max-width:1000px){
      .form-styles{
        position:initial;
				padding-left:9%;
				background-color: #eaeaea73;
        margin: 0 auto;
        margin-top: 8%;
      }
    }
	
	</style>

<?php echo the_content(); ?>

<?php include('form.php'); ?>
<!-- Anexinet Main Form End -->

<?php if(!$full_pages == true) {echo '</div>';}?>

</div>

<?php endwhile; ?>

<?php get_footer();